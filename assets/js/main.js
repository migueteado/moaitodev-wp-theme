setTheme(null);

$(document).on("click", ".menu-btn", function () {
  if ($("#mainMenu").hasClass("-translate-x-full")) {
    $("#mainMenu").removeClass("-translate-x-full");
  } else {
    $("#mainMenu").addClass("-translate-x-full");
  }
});

$(document).on("click", ".theme-btn", changeTheme);

$(document).on("click", ".search-btn", function (event) {
  $(".search-box").removeClass("hidden");
});

$(document).on("click", "a", function (event) {
  event.preventDefault();
  const url = $(event.target).closest("a").attr("href");
  showVeil(() => {
    location.replace(url);
  });
});

$(function () {
  hideVeil();
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

function hideVeil() {
  const veil = $("#veil");
  veil.addClass("transition-all");
  veil.addClass("duration-500");

  setTimeout(function () {
    veil.addClass("opacity-0");
    setTimeout(function () {
      veil.addClass("hidden");
    }, 500);
  }, 500);
}

function showVeil(callback) {
  const veil = $("#veil");
  veil.removeClass("hidden");

  setTimeout(function () {
    veil.removeClass("opacity-0");
    setTimeout(function () {
      callback();
    }, 500);
  }, 500);
}
