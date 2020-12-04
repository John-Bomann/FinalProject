rows = document.querySelectorAll(".row");

rows.forEach((row) => {
	table = row.querySelector(".table");
	sidebar = row.querySelector(".sidebar");
	sidebar.style.maxHeight = `${table.offsetHeight}px`;
	console.log(sidebar.offsetHeight);
});
