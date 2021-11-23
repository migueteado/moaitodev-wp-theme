setTheme(null);

$(document).on("click", ".menu-btn", function () {
  if ($("#mainMenu").hasClass("-translate-x-full")) {
    $("#mainMenu").removeClass("-translate-x-full");
  } else {
    $("#mainMenu").addClass("-translate-x-full");
  }
});

$(document).on("click", ".theme-btn", changeTheme);

$(document).on("click", ".search-btn", function () {
  $(".search-box").removeClass("hidden");
});

function setTheme(set) {
  let theme = localStorage.getItem("wp-theme");
  if (!!set) {
    theme = set;
  }

  if (!theme) theme = "dark";

  if (theme === "dark") {
    $(document.documentElement).addClass("dark");
    $(".theme-icon").html(`<i class="fas fa-sun"></i>`);
  } else {
    $(document.documentElement).removeClass("dark");
    $(".theme-icon").html(`<i class="fas fa-moon"></i>`);
  }

  localStorage.setItem("wp-theme", theme);
}

function changeTheme() {
  const theme = localStorage.getItem("wp-theme");
  if (theme === "dark") {
    setTheme("light");
  } else {
    setTheme("dark");
  }
}
