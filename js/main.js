// Menu Mobile
$(function(){
    $(".button-collapse").sideNav();
});

// Permitir somente números no Input de Telefone
$('#telefone').keyup(function() {
    $(this).val(this.value.replace(/\D/g, ''));
});

// Abrir Modal para atualizar dados da tabela
$(document).ready(function(){
    $('#modal-atualizar').modal();
});

