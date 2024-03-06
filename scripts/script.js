const datePlaceholder = document.getElementById("date-placeholder");
const date = new Date();
const year = date.getFullYear();
const dayName = date.toLocaleString("fr", {weekday: "long"});
const monthName = date.toLocaleString("fr", {month: "long"});
const dayNumber = date.getDate();
const dateString = `${dayName} ${dayNumber} ${monthName} ${year}`;
datePlaceholder.textContent = dateString;