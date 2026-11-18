// Selecting DOM elements
const settingBox = document.querySelector(".setting-box");
const toggleSetting = document.querySelector("#toggle-setting");
const linksListLanding = document.querySelectorAll(".links li");
const linksListLandingPhone = document.querySelectorAll(".dropdown_menu li");
const colorsItemsLinks = document.querySelectorAll(".colorsItems li");
const bullets = document.querySelectorAll(".bullets li");
const closeIcon = document.querySelector(".close-icon");
const resetBtn = document.getElementById("reset");

// Checking and applying stored color preferences from localStorage
const colorStorage = localStorage.getItem("optionColor");
const sidebarColorStorage = localStorage.getItem("sidebarColor");
const activeColor = localStorage.getItem("activeLink");

// Function to set the active state for color options
function setActiveColorOption(colorsItemsLinks) {
  if (activeColor) {
    colorsItemsLinks.forEach((link) =>
      link.id === activeColor
        ? link.classList.add("active")
        : link.classList.remove("active")
    );
  }
}
setActiveColorOption(colorsItemsLinks);

if (colorStorage) {
  document.documentElement.style.setProperty("--main-bg-color", colorStorage);
}
if (sidebarColorStorage) {
  document.documentElement.style.setProperty(
    "--sidebar-color",
    sidebarColorStorage
  );
}

// Function to set the color option and update localStorage
function setColorOption(color, bgColor) {
  document.documentElement.style.setProperty("--main-bg-color", color);
  document.documentElement.style.setProperty("--sidebar-color", bgColor);
  localStorage.setItem("optionColor", color);
  localStorage.setItem("sidebarColor", bgColor);
}

// Function to handle color changes on click
function changeColors() {
  const colorsItems = document.querySelectorAll(".colorsItems li");
  colorsItems.forEach((colorItem) => {
    colorItem.addEventListener("click", (e) => {
      const color = e.target.dataset.color;
      const bgColor = e.target.dataset.bgcolor;

      setColorOption(color, bgColor);

      // Update the active state of the clicked color item
      colorsItems.forEach((item) => item.classList.remove("active"));
      colorItem.classList.add("active");

      // Save the active color
      localStorage.setItem("activeLink", colorItem.id);
    });
  });
}

changeColors();

resetBtn.addEventListener("click", () => {
  localStorage.clear();
  document.documentElement.style.removeProperty("--main-bg-color");
  document.documentElement.style.removeProperty("--sidebar-color");

  // Remove active state from color options
  colorsItemsLinks.forEach((link) => link.classList.remove("active"));

  // Optionally, set to default colors if any
  const defaultColor = "#1978dd"; // replace with your default color
  const defaultSidebarColor = "#3e444a"; // replace with your default sidebar

  document.documentElement.style.setProperty("--main-bg-color", defaultColor);
  document.documentElement.style.setProperty(
    "--sidebar-color",
    defaultSidebarColor
  );
  contentWrapper.style.setProperty("background-color", "white", "important");

  colorsItemsLinks.forEach((link) => {
    if (+link.id === 1) {
      link.classList.add("active");
      // Use setProperty to apply important styles
    }
  });

  // Re-apply event listeners for color changes
  changeColors();
});

// Toggle settings box visibility and add a spin effect
toggleSetting.addEventListener("click", () => {
  settingBox.classList.toggle("open");
});
closeIcon.addEventListener("click", () => settingBox.classList.remove("open"));
