export default class Filter {
  /**
   *
   * @param {HTMLElement | null} element
   * @property {HTMLElement} pagination
   * @property {HTMLElement} sorting
   * @property {HTMLElement} content
   * @property {HTMLFormElement} form
   */
  constructor(element) {
    if (element === null) {
      return;
    }
    this.pagination = element.querySelector(".js-filter-pagination");
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

    const aClickListener = e=> {
      if (e.target.tagName === "A") {
        e.preventDefault();
        this.loadUrl(e.target.getAttribute("href"));
      }
    }

    this.sorting.addEventListener("click", aClickListener);
    //this.pagination.addEventListener("click", aClickListener);
    
    this.form.querySelectorAll("input").forEach((input) => {
      input.addEventListener("change", this.loadForm.bind(this));
    });

    this.reset.addEventListener("click", (e)=> {
      this.loadUrl(window.location.host + "/product");
      this.loadForm();
      //debugger
    })
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
    return this.loadUrl(url.pathname + "?" + params.toString())
  }

  async loadUrl(url) {
    const ajaxUrl = url + '&ajax=1'
    const response = await fetch(ajaxUrl, {
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
      //this.pagination.innerHTML = data.content;
      this.reset.innerHTML = this.form.reset();
      history.replaceState({}, "", url);
    } else {
      console.error(response);
    }
  }
}
