 <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
 <div class="nav">
    <nav class="sidebar-menu menu-bar">
      <ul id="menu-main-menu" class="menu-left">
        <?php 
          $locations = get_nav_menu_locations();
          $menu_id = $locations['primary'];
          $menu = wp_get_nav_menu_items($menu_id);
          if ($menu){
            foreach ($menu as $index => $item) {
              $parent_id = $item->menu_item_parent;
              $slug = sanitize_title($item->title);
              if($parent_id == 0){ ?>
                <li class="menu-item <?php echo $index == 0 ? 'active' : ''; ?>" data-menu="<?php echo $slug; ?>">
                    <a href="javascript:void(0)"><?php echo $item->title; ?> <i class="bi bi-arrow-right"></i></a>
                </li>
              <?php
              }
            }
          }
        ?>
      </ul>

      <ul class="menu-middle" id="children"></ul>

      <div class="sidebar-preview menu-right d-block" id="preview">
        <div class="preview-card">
          <img id="previewImg" src="https://via.placeholder.com/400x200.png?text=Software" class="img-fluid rounded mb-3" alt="previewImg">
          <h4 id="preview-title"></h4>
          <p id="preview-desc"></p>
          <a href="/custom-software-development" id="preview-btn" class="btn btn-primary">Explore Page <i class="bi bi-arrow-right align-middle"></i></a>
        </div>
      </div>
    </nav>
  </div>
</aside>

<script>
  const toggleSidebar = document.getElementsByClassName("toggle-sidebar-btn");
  const sidebar = document.getElementById("sidebar");
  const childrenContainer = document.getElementById("children");

  const menuData = <?php echo json_encode(get_custom_menu_data()); ?>;
  // console.log(menuData);
  document.querySelectorAll(".menu-item").forEach(menu => {
    menu.addEventListener("click", () => {
      document.querySelectorAll(".menu-item a").forEach(a => a.classList.remove("active"));
      document.querySelectorAll(".child-item a").forEach(a => a.classList.remove("active"));

      const menuAnchor = menu.querySelector("a");
      if (menuAnchor) menuAnchor.classList.add("active");

      const selectedMenu = menu.dataset.menu;
      const menuObj = menuData[selectedMenu];

      childrenContainer.innerHTML = "";

      if (menuObj.childs && menuObj.childs.length > 0) {
        document.querySelectorAll('.menu-middle').forEach(function(el) {
          el.style.display = 'block';
        });

        menuObj.childs.forEach((child) => {
          const li = document.createElement("li");
          li.className = "child-item";

          const a = document.createElement("a");
          a.href = "javascript:void(0)";

          const img = document.createElement("img");
          img.src = child.menu_icon;   
          img.alt = child.title;
    
          const text = document.createTextNode(child.title);

          a.appendChild(img);
          a.appendChild(text);

          a.dataset.title = child.title;
          a.dataset.desc = child.desc;
          a.dataset.img = child.img;
          a.dataset.url = child.url;

          li.appendChild(a);
          childrenContainer.appendChild(li);
        });

        childrenContainer.querySelectorAll(".child-item a").forEach(anchor => {
          anchor.addEventListener("click", () => {
            childrenContainer.querySelectorAll(".child-item a").forEach(c => c.classList.remove("active"));

            if (menuAnchor) menuAnchor.classList.add("active");
            anchor.classList.add("active");

            updatePreview(anchor.dataset);
          });
        });
      } else {
        document.querySelectorAll('.menu-middle').forEach(function(el) {
          el.style.display = 'none';
        });
      }
      updatePreview(menuObj.main);
    });
  });

  function updatePreview(data) {
    document.getElementById("previewImg").src = data.img;
    document.getElementById("preview-title").innerText = data.title;
    document.getElementById("preview-desc").innerText = data.desc;
    document.getElementById("preview-btn").href = data.url;
  }

  // Load default (Services) on start
  document.querySelector(".menu-item.active").click();
</script>