const quizContainer = document.getElementById("quiz");
const resultsContainer = document.getElementById("results");
const submitButton = document.getElementById("submit");
const dataTarget = document.getElementById("data");
const subclassData = JSON.parse(dataTarget.textContent);
const quizQuestions = [
	{
		question: "What do you use to interact with the world?",
		options: ["All magic", "Mostly magic", "Mostly physical skill", "All physical skill"],
	},
	{
		question: "What drives you?",
		options: ["My patron", "My conviction", "Knowledge", "Eh"],
	},
	{
		question: "How do you feel about death?",
		options: [
			"I'm not a big fan",
			"I bring it upon others",
			"It's a natural part of life",
			"Oh yeah, we go way back",
			"Please don't say that word in front of my zombies",
		],
	},
	{
		question: "What do you bring to your party?",
		options: ["Damage", "Utility", "Support", "A good time"],
	},
	{
		question: "What is your favorite time of day?",
		options: ["Dawn", "Noon", "Dusk", "Midnight"],
		// noon midnight dawn dusk
	},
	{
		question: "How do you carry yourself?",
		options: ["With fury", "With pride", "With skill", "With humility"],
	},
];

function buildQuiz() {
	const output = [];

	quizQuestions.forEach((question, questionIndex) => {
		const answers = [];

		question.options.forEach((option, optionIndex) => {
			answers.push(
				`<label class="btn btn-lg btn-light">
          <input type="radio" name="option${questionIndex}" value="${optionIndex + 1}">
          ${option}
        </label>`
			);
		});
		output.push(
			`<h4 class="questionTitle text-center mt-2">${question.question}</h4>
      <div class="btn-group-vertical mb-2 options" data-toggle="buttons">
        ${answers.join("")}
      </div>`
		);
	});
	quizContainer.innerHTML = output.join("");
}

function showResults() {
	const optionContainers = quizContainer.querySelectorAll(".options");
	let answers = [];
	let incomplete = false;

	optionContainers.forEach((answerContainer, questionIndex) => {
		const selector = `input[name=option${questionIndex}]:checked`;
		const userAnswer = (answerContainer.querySelector(selector) || {}).value;
		if (!userAnswer) {
			incomplete = true;
		}
		answers.push(userAnswer);
	});

	if (incomplete) {
		resultsContainer.querySelector("h2").textContent =
			"*You need to answer all questions, try again.";
		resultsContainer.classList.remove("d-none");
		resultsContainer.classList.add("text-danger");
		resultsContainer.scrollIntoView({ behavior: "smooth" });
	} else {
		handleSuccess(answers);
	}
}

function handleSuccess(answers) {
	$("#quizQuestions").fadeOut();
	matchCheck(answers);
}

function matchCheck(answers) {
	console.log(answers);
	let bestMatch = { highCount: 0, matches: [] };

	// Checking for matches, and applying new parameters if no matches
	subclassData.forEach((subclass) => {
		let count = 0;
		if (subclass.damage == answers[0]) {
			count += 1.1;
		}
		if (subclass.devotion == answers[1]) {
			count++;
		}
		if (subclass.death == answers[2]) {
			count++;
		} else if (
			(answers[2] === 5 && subclass.class === "Warlock") ||
			subclass.class === "Cleric" ||
			subclass.class === "Wizard"
		) {
			count++;
		}

		if (subclass.purpose == answers[3]) {
			count++;
		}
		if (subclass.time == answers[4]) {
			count += 0.2;
			if (answers[4] === 4) {
				count += 0.9;
			}
		}
		if (subclass.mindset == answers[5]) {
			count++;
		} else {
			subclass.mindset - answers[5] === 1 ? (count += 0.8) : null;
		}
		if (count > bestMatch.highCount) {
			bestMatch.highCount = count;
			bestMatch.matches = [subclass.name];
		} else if (count === bestMatch.highCount) {
			bestMatch.matches.push(subclass.name);
		}
	});
	console.log(`Match found with: ${bestMatch.highCount} matches` + bestMatch.matches);
}

buildQuiz();

submitButton.addEventListener("click", showResults);
