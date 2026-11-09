    const searchForm = document.querySelector("#job-search");
    const keywordInput = document.querySelector("#keyword");
    const locationSelect = document.querySelector("#location");
    const categorySelect = document.querySelector("#category");
    const jobCards = [...document.querySelectorAll(".job-card")];
    const filterButtons = [...document.querySelectorAll(".filter-button")];
    const resultsCount = document.querySelector("#results-count");
    const searchNotice = document.querySelector("#search-notice");
    const menuToggle = document.querySelector(".menu-toggle");
    const navigation = document.querySelector("#primary-navigation");
    let activeType = "all";

    function updateJobs() {
      const keyword = keywordInput.value.trim().toLowerCase();
      const location = locationSelect.value.toLowerCase();
      const category = categorySelect.value;
      let visibleCount = 0;

      jobCards.forEach((card) => {
        const searchableText = `${card.dataset.keywords} ${card.dataset.category} ${card.dataset.location} ${card.querySelector(".company-name").textContent} ${card.querySelector(".job-title").textContent}`.toLowerCase();
        const matches = (!keyword || searchableText.includes(keyword))
          && (!location || card.dataset.location.toLowerCase() === location)
          && (!category || card.dataset.category === category)
          && (activeType === "all" || card.dataset.type === activeType);
        card.hidden = !matches;
        if (matches) visibleCount += 1;
      });

      resultsCount.textContent = `${visibleCount} ${visibleCount === 1 ? "opportunity" : "opportunities"}`;
      document.querySelector("#empty-state").classList.toggle("visible", visibleCount === 0);
      const hasSearch = Boolean(keyword || location || category);
      searchNotice.textContent = hasSearch ? "Showing featured opportunities that match your search." : "";
      searchNotice.classList.toggle("visible", hasSearch);
    }

    searchForm.addEventListener("submit", (event) => {
      event.preventDefault();
      updateJobs();
      document.querySelector("#jobs").scrollIntoView({ behavior: "smooth" });
    });

    filterButtons.forEach((button) => {
      button.addEventListener("click", () => {
        activeType = button.dataset.filter;
        filterButtons.forEach((item) => {
          const isActive = item === button;
          item.classList.toggle("active", isActive);
          item.setAttribute("aria-pressed", String(isActive));
        });
        updateJobs();
      });
    });

    document.querySelectorAll("[data-category].category-card").forEach((card) => {
      card.addEventListener("click", () => {
        categorySelect.value = card.dataset.category;
        activeType = "all";
        filterButtons.forEach((button) => {
          const isActive = button.dataset.filter === "all";
          button.classList.toggle("active", isActive);
          button.setAttribute("aria-pressed", String(isActive));
        });
        updateJobs();
      });
    });

    document.querySelectorAll("[data-search-term], [data-location]").forEach((link) => {
      link.addEventListener("click", () => {
        if (link.dataset.searchTerm) keywordInput.value = link.dataset.searchTerm;
        if (link.dataset.location) locationSelect.value = link.dataset.location;
        activeType = "all";
        filterButtons.forEach((button) => {
          const isActive = button.dataset.filter === "all";
          button.classList.toggle("active", isActive);
          button.setAttribute("aria-pressed", String(isActive));
        });
        updateJobs();
      });
    });

    document.querySelectorAll(".save-button").forEach((button) => {
      button.addEventListener("click", () => {
        const saved = button.getAttribute("aria-pressed") !== "true";
        button.setAttribute("aria-pressed", String(saved));
        button.classList.toggle("saved", saved);
        button.setAttribute("aria-label", `${saved ? "Unsave" : "Save"} ${button.getAttribute("aria-label").replace(/^(Save|Unsave) /, "")}`);
      });
    });

    menuToggle.addEventListener("click", () => {
      const isOpen = menuToggle.getAttribute("aria-expanded") === "true";
      menuToggle.setAttribute("aria-expanded", String(!isOpen));
      menuToggle.setAttribute("aria-label", isOpen ? "Open navigation" : "Close navigation");
      navigation.classList.toggle("open", !isOpen);
    });

    navigation.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => {
        navigation.classList.remove("open");
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Open navigation");
      });
    });

    document.querySelector("#current-year").textContent = new Date().getFullYear();
  