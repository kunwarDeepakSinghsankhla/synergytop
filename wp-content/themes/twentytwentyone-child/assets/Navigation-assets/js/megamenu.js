$(document).ready(function () {
  $(".menu-link").on("click", function (e) {
    e.preventDefault(); // Prevent default link behavior

    const $this = $(this); // Current clicked link
    const $parentLi = $this.parent(); // Parent <li> of the clicked link
    const $level = $this.closest("ul"); // Closest <ul> (level2, level3, etc.)
    const $level1 = $this.closest(".level1"); // Closest level1 container
    const $menuBar = $(".menu-bar"); // Menu bar container
    const levelClass = $level.attr("class"); // Get the level class (e.g., level2, level3)

    // Close other level1 menus when navigating to a different level1 branch
    if (levelClass.includes("level2")) {
      $(".level1")
        .not($level1)
        .find(".level2, .level3, .level4, .level5")
        .removeClass("open-level3 open-level4 open-level5");
      $(".level1").not($level1).find(".menu-link").removeClass("active");
    }

    // Remove active/open classes from siblings at the same level
    $level.find(".menu-link").not($this).removeClass("active");
    $level
      .find(".level3, .level4, .level5")
      .not($this.siblings())
      .removeClass("open-level3 open-level4 open-level5");

    // Add active class to the clicked link
    $this.addClass("active");

    // Handle submenus:
    // Open the immediate submenu if it exists
    if ($this.siblings(".level3").length) {
      $this.siblings(".level3").addClass("open-level3");
    }
    if ($this.siblings(".level4").length) {
      $this.siblings(".level4").addClass("open-level4");
    }
    if ($this.siblings(".level5").length) {
      $this.siblings(".level5").addClass("open-level5");
    }

    // Maintain parent link's active state when clicking a child submenu
    if (levelClass.includes("level3")) {
      $this.closest(".level2").find("> .menu-link").addClass("active");
    }
    if (levelClass.includes("level4")) {
      $this.closest(".level3").find("> .menu-link").addClass("active");
      $this.closest(".level2").find("> .menu-link").addClass("active");

      // Add a class to .menu-bar when a level4 link has a submenu (level5)
      if ($this.siblings(".level5").length) {
        $menuBar.addClass("level4-active");
      } else {
        $menuBar.removeClass("level4-active");
      }
    } else {
      // Remove the class if navigating away from level4
      $menuBar.removeClass("level4-active");
    }
    if (levelClass.includes("level5")) {
      $this.closest(".level4").find("> .menu-link").addClass("active");
      $this.closest(".level3").find("> .menu-link").addClass("active");
      $this.closest(".level2").find("> .menu-link").addClass("active");
    }

    // Collapse any sibling submenus if the clicked link has no submenu
    if (!$this.siblings(".level3, .level4, .level5").length) {
      $level
        .find(".level3, .level4, .level5")
        .not($this.siblings())
        .removeClass("open-level3 open-level4 open-level5");
    }
  });

  // Close all levels and remove active/open classes when clicking on closeAllLevel
  $(".closeAllLevel").on("click", function () {
    $(".menu-bar").removeClass("level4-active"); // Remove level4-active class from menu-bar
    $(".menu-link").removeClass("active"); // Remove active class from all menu links
    $(".level3, .level4, .level5").removeClass(
      "open-level3 open-level4 open-level5"
    ); // Remove open classes
  });

  // Go one level back functionality
  $(".goBack").on("click", function () {
    const $menuBar = $(".menu-bar");
    const $activeSubmenu = $menuBar
      .find(".open-level5, .open-level4, .open-level3")
      .last(); // Get the last open submenu
    const $parentMenuLink = $activeSubmenu.closest("li").find("> .menu-link"); // Find the parent menu link

    // Remove open class from the current submenu
    $activeSubmenu.removeClass("open-level5 open-level4 open-level3");

    // Highlight the parent menu link
    $parentMenuLink.addClass("active");

    // If going back from level4 and no other level4 is active, remove the level4-active class
    if (!$menuBar.find(".open-level4").length) {
      $menuBar.removeClass("level4-active");
    }
  });

  // Close all levels and remove active classes when clicking on toggle-sidebar-btn
  $(".toggle-sidebar-btn").on("click", function () {
    $(".menu-bar").removeClass("level4-active"); // Remove level4-active class
    $(".menu-link").removeClass("active"); // Remove active class
    $(".level3, .level4, .level5").removeClass(
      "open-level3 open-level4 open-level5"
    ); // Remove all open-level classes
  });
});
