/*------------dark/light mode-------------*/
// Get references to the toggle checkbox and the body
const checkbox = document.getElementById("checkbox");
const body = document.body;

// Check local storage for theme preference
if (localStorage.getItem("theme") === "dark") {
    body.classList.add("dark-mode");
    checkbox.checked = true;
} else {
    body.classList.add("light-mode");
}

// Event listener for the toggle
checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
        body.classList.remove("light-mode");
        body.classList.add("dark-mode");
        localStorage.setItem("theme", "dark"); // Save preference
    } else {
        body.classList.remove("dark-mode");
        body.classList.add("light-mode");
        localStorage.setItem("theme", "light"); // Save preference
    }
});
/*----------------------------------------------*/

let taskInput = document.querySelector("#taskInput");
        let btn = document.querySelector("#addBtn");
        let ul = document.querySelector("#taskList");

        btn.addEventListener("click", function() {
            if (taskInput.value.trim() === "") {
                alert("Please enter a task."); // Alert if input is empty
                return; // Exit the function
            }

            // Create a list item
            let item = document.createElement("li");
            item.innerText = taskInput.value;
            

            // Create a delete button
            let delBtn = document.createElement("button");
            delBtn.innerText = "delete";
            delBtn.classList.add("delete");
            delBtn.addEventListener("click", function() {
                ul.removeChild(item); // Remove the item
            });

            // Append delete button to the item
            item.appendChild(delBtn);
            ul.appendChild(item);

            // Clear input fields
            taskInput.value = "";
        });