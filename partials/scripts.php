  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://www.youtube.com/iframe_api?<?=time()?>"></script>

  <script>
  // Variável que armazena o ID do vídeo do YouTube
  var videoId = 'ou_2D0tyrbo';

  // Função que cria o player do YouTube
  function onYouTubeIframeAPIReady() {
      new YT.Player('player', {
          videoId: videoId,
          playerVars: {
              autoplay: 1,    // Autoplay do vídeo
              controls: 1,    // Exibir controles do player
              showinfo: 0,    // Ocultar informações do vídeo
              rel: 0          // Desabilitar vídeos relacionados ao final.
          }
      });
  }
  </script>

  <!-- API de Produtos -->
  <script src="assets/js/es-oas-client.js"></script>
  <script src="assets/js/es-oas-config.js"></script>

  <script>
        "use strict";

        /* # Chamadas à API - INÍCIO ############################################## */

        esOasClient.config.pathOas = API_BASE;
        esOasClient.config.token = API_TOKEN;

        let nomeObjeto = "category"; // Para montar caminho do endpoint

        function categoriaList_Load(pageSize, pageNumber) {
            esOasClient.list_Load(nomeObjeto, categoriaList_LoadSuccess, null, null, { "lang": "pt_BR" }, pageSize, pageNumber);
        }

        function categoriaList_LoadSuccess(response) {
            pagina_categoria_carrega_lista(response);
        }

        function categoria_Load(id) {
            esOasClient.item_Load(nomeObjeto, id, categoria_LoadSuccess, null, null, { "lang": "pt_BR" });
        }

        function categoria_LoadSuccess(response) {
            pagina_categoria_carrega_item(response);
        }

        /*# Chamadas à API - FIM ################################################## */
        /*# Manipulação de conteúdo na página - INÍCIO ############################ */

        let ulCategoriaList = document.getElementById("ulCategoriaList");
        let divCategoria = document.getElementById("divCategoria");
        let spnItemsTotal = document.getElementById("spnItemsTotal");
        let spnItemsCount = document.getElementById("spnItemsCount");
        let spnPageSize = document.getElementById("spnPageSize");
        let spnPageCurrent = document.getElementById("spnPageCurrent");
        let spnPageCount = document.getElementById("spnPageCount");
        let aPrevious = document.getElementById("aPrevious");
        let navList = document.getElementById("navList");
        let aNext = document.getElementById("aNext");

        aPrevious.addEventListener("click", categoriaPageLink_click);
        aNext.addEventListener("click", categoriaPageLink_click);

        // Carrega lista de itens na lista e preenche controles de paginação.
        function pagina_categoria_carrega_lista(response) {
            ulCategoriaList.innerHTML = "";

            spnItemsTotal.innerHTML = response.countTotal;
            spnItemsCount.innerHTML = response.count;
            spnPageSize.innerHTML = response.pageSize;
            spnPageCurrent.innerHTML = response.pageNumber;
            spnPageCount.innerHTML = response.pageCount;

            navList.style.visibility = "hidden";
            if (response.pageNumber > 1) {
                aPrevious.href = "#";
                aPrevious.EsPageNum = response.pageNumber - 1;
                navList.style.visibility = "visible";
            } else {
                aPrevious.removeAttribute('href');
                aPrevious.EsPageNum = undefined;
            }

            if (response.pageNumber < response.pageCount) {
                aNext.href = "#";
                aNext.EsPageNum = response.pageNumber + 1;
                navList.style.visibility = "visible";
            } else {
                aNext.removeAttribute('href');
                aNext.EsPageNum = undefined;
            }

            for (let i = 0, l = response.items.length; i < l; i++) {
                let aCategoria = document.createElement("a");
                aCategoria.EsCatId = response.items[i].id;
                aCategoria.href = "#";
                aCategoria.innerHTML = response.items[i].name;
                aCategoria.addEventListener("click", categoriaLink_click);

                let liCategoria = document.createElement("li");
                liCategoria.appendChild(aCategoria);

                ulCategoriaList.appendChild(liCategoria);
            }
        }

        // Carrega item no quadro
        function pagina_categoria_carrega_item(response) {
            divCategoria.innerHTML = response.item.name;
        }

        // Evento: Link de paginação recebeu um clique
        function categoriaPageLink_click(e) {
            let t = e.currentTarget || e.target || this;
            e.preventDefault();
            categoriaList_Load(10, t.EsPageNum);
        }

        // Evento: Link recebeu um clique
        function categoriaLink_click(e) {
            let t = e.currentTarget || e.target || this;
            e.preventDefault();
            categoria_Load(t.EsCatId);
        }

        // Carregamento inicial da lista na página.
        categoriaList_Load(10);

        /*# Manipulação de conteúdo na página  - FIM ############################## */
    </script>
    

<script>
    document.addEventListener("DOMContentLoaded", function() {
      var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));

      document.addEventListener("scroll", function() {
        var scrollPosition = window.scrollY || document.documentElement.scrollTop;
        var triggerPosition = 500; // Posição de rolagem para exibir o modal

        if (scrollPosition >= triggerPosition) {
          myModal.show();
          document.removeEventListener("scroll", arguments.callee); // Remove o event listener após abrir o modal
        }
      });
    });
</script>

  