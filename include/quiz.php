<?php
  include("config.php");
  
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_array($result);
?>

<script>
  console.log("hey");
  const quizContainer = document.getElementById("quiz");
  const resultsContainer = document.getElementById("results");
  const submitButton = document.getElementById("submit");
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
      options: ["With pride", "With fury", "With skill", "With humility"],
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
    let totalScore = [];
    let incomplete = false;

    optionContainers.forEach((answerContainer, questionIndex) => {
      const selector = `input[name=option${questionIndex}]:checked`;
      const userAnswer = (answerContainer.querySelector(selector) || {}).value;
      if (!userAnswer) {
        incomplete = true;
      }
      totalScore.push(userAnswer);
    });

    if (incomplete) {
      resultsContainer.querySelector("h2").textContent =
        "*You need to answer all questions, try again.";
      resultsContainer.classList.remove("d-none");
      resultsContainer.classList.add("text-danger");
      resultsContainer.scrollIntoView({ behavior: "smooth" });
    } else {
      handleSuccess();
    }
  }

  function handleSuccess() {
    $("#quizQuestions").fadeOut();
  }
  console.log(subclassData);

  buildQuiz();

  submitButton.addEventListener("click", showResults);
</script>