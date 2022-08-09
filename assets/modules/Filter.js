export default class Filter {
  /**
   *
   * @param {HTMLElement | null} element
   * @property {HTMLElement} sorting
   * @property {HTMLElement} content
   * @property {HTMLFormElement} form
   */
  constructor(element) {
    if (element === null) {
      return;
    }
    this.content = element.querySelector(".js-filter-content");
    this.form = element.querySelector(".js-filter-form");
    this.sorting = element.querySelector(".js-filter-sorting");
    this.reset = element.querySelector(".js-filter-reset");

    this.bindEvents();

    console.log("constructeur Filter");
  }

  /**
   * Ajoute les comportements aux differents élements
   */
  bindEvents() {
    const aClickListener = (e) => {
      if (e.target.tagName === "A") {
        e.preventDefault();
        this.loadUrl(e.target.getAttribute("href"));
      }
    };

    this.sorting.addEventListener("click", aClickListener);
    this.reset.addEventListener("click", aClickListener);

    this.form.querySelectorAll("input").forEach((input) => {
      input.addEventListener("change", this.loadForm.bind(this));
    });

    this.reset.addEventListener("click", () => {
      this.loadUrl(window.location.host + "/product");
      this.loadForm();
      //debugger
    });
  }

  async loadForm() {
    //recuperation des data du formulaires * checkbox
    const data = new FormData(this.form);
    //modification de l URL
    const url = new URL(
      this.form.getAttribute("action") || window.location.href
    );
    //construction des parametres d URL
    //on récupere les parametres du formulaire ex categorie min max etc ...
    const params = new URLSearchParams();

    data.forEach((value, key) => {
      params.append(key, value);
    });
    //debugger;
    return this.loadUrl(url.pathname + "?" + params.toString());
  }

  async loadUrl(url) {
    this.showLoader();
    const params = new URLSearchParams(url.split("?")[1] || "");
    params.set("ajax", 1);
    const response = await fetch(url.split("?")[0] + "?" + params.toString(), {
      headers: {
        "X-Requested-With": "XMLHttpRequest",
      },
    });
    if (response.status >= 200 && response.status < 300) {
      //reccuperation des données sous forme de tableau json
      const data = await response.json();
      //remplacement du contenu de la page
      this.content.innerHTML = data.content;
      this.sorting.innerHTML = data.sorting;
      //this.pagination.innerHTML = data.pagination;
      params.delete("ajax");
      history.replaceState({}, "", url.split("?")[0] + "?" + params.toString());
    } else {
      console.error(response);
    }
    this.hideLoader();
  }

  showLoader() {
    const loader = this.form.querySelector(".js-loading");
    if (loader === null) {
      return;
    }
    this.form.classList.add("is-loading");
    loader.style.display = null;
  }
  hideLoader() {
    const loader = this.form.querySelector(".js-loading");
    if (loader === null) {
      return;
    }
    this.form.classList.remove("is-loading");
    loader.style.display = "none";
  }
}
