 <!-- Modal Global Deletar por ID -->
 <div id="modal-delete" class="modal" tabindex="-1">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title">Deletar</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <form action="{{ route('admin.usuario.destroy', 0) }}" method="POST">
                 @csrf
                 @method('DELETE')
                 <div class="modal-body">
                     <p class="modal-text-content">Tem certeza que deseja deletar esse usuário?</p>
                 </div>
                 <div class="modal-footer">
                     <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                     <button type="submit" class="btn btn-primary">Deletar</button>
                 </div>
             </form>
         </div>
     </div>
 </div>
 <!-- /Modal Global Deletar por ID -->

 <script>
     /**
      * Função utilizada para chamar o modal global delete.
      */
     function deletar(e) {
         let modal = $("#modal-delete");
         let form = $("#modal-delete form")
         let title = $("#modal-delete .modal-title");
         let content = $("#modal-delete .modal-text-content");
         let action = $(e).data("action");
         title.text($(e).data("title"));
         content.text($(e).data("content"));
         form.attr("action", action);
         modal.modal("show");
     }
 </script>
