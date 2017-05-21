$( document ).ready(function() {
var page = 1;
var current_page = 1;
var total_page = 0;
var is_ajax_fire = 0;

manageData();

    /* manage data list */
    function manageData() {
        $.ajax({
            dataType: 'json',
            url: url+'api/getDataDisciplinas.php',
            data: {page:page}
        }).done(function(data){
          total_page = Math.ceil(data.total/10);
          current_page = page;

          $('#pagination').twbsPagination({
              totalPages: total_page,
              visiblePages: current_page,
              onPageClick: function (event, pageL) {
                page = pageL;
                    if(is_ajax_fire != 0){
                  getPageData();
                    }
              }
          });

          manageRow(data.data);
            is_ajax_fire = 1;

        });

    }

    /* Get Page Data*/
    function getPageData() {
      $.ajax({
          dataType: 'json',
          url: url+'api/getDataDisciplinas.php',
          data: {page:page}
      }).done(function(data){
        manageRow(data.data);
      });
    }

    /* Create new Disciplina */
    $(".crud-submit").click(function(e){
        e.preventDefault();
        var form_action = $("#create-disciplina").find("form").attr("action");
        var nome = $("#create-disciplina").find("input[name='nome']").val();
        var descricao = $("#create-disciplina").find("textarea[name='descricao']").val();
        var codigo = $("#create-disciplina").find("input[name='codigo']").val();
        var semestre = $("#create-disciplina").find("input[name='semestre']").val();
        var carga_horaria = $("#create-disciplina").find("input[name='carga_horaria']").val();
        
        if(nome != '' && codigo != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + form_action,
                data:{nome:nome,
                      descricao:descricao,
                      codigo:codigo,
                      semestre:semestre,
                      carga_horaria:carga_horaria,
                  }
            }).done(function(data){
                $(".modal").modal('hide');
                getPageData();
                toastr.success('Disciplina cadastrada.', 'Sucesso', {timeOut: 8000});
            });
        }
        else{
                alert('Você não preencheu os campos Nome e Código.')
            }

    });
    
    /* Search Iem */
    $("#search").click(function(e){
      var nome = $(".buscar").find("input[name='nome']").val();
      $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + 'api/search.php',
                data:{nome:nome}
            }).done(function(data){
                manageRow(data);
        });
    });

    /* Remove Item */
    $("body").on("click",".remove-item",function(){
        var id = $(this).parent("td").data('id');
        var c_obj = $(this).parents("tr");

        $.ajax({
            dataType: 'json',
            type:'POST',
            url: url + 'api/delete_disciplina.php',
            data:{id:id}
        }).done(function(data){
            c_obj.remove();
            toastr.success('Disciplina excluída.', 'Success Alert', {timeOut: 8000});
            getPageData();
        });

    });

    /* Edit Item */
    $("body").on("click",".edit-disciplina",function(){

        var id = $(this).parent("td").data('id');
        var nome = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").prev("td").text();
        var descricao = $(this).parent("td").prev("td").prev("td").prev("td").prev("td").text();
        var codigo = $(this).parent("td").prev("td").prev("td").prev("td").text().replace('\n','').replace(/ /g,'');
        var semestre = $(this).parent("td").prev("td").prev("td").text().replace('\n','').replace(/ /g,'');
        var carga_horaria = $(this).parent("td").prev("td").text().replace('\n','').replace(/ /g,'');

        $("#edit-disciplina").find("input[name='nome']").val(nome);
        $("#edit-disciplina").find("textarea[name='descricao']").val(descricao);
        $("#edit-disciplina").find("input[name='codigo']").val(codigo);
        $("#edit-disciplina").find("input[name='semestre']").val(semestre);
        $("#edit-disciplina").find("input[name='carga_horaria']").val(carga_horaria);
        $("#edit-disciplina").find(".edit-id").val(id);

    });

    /* Updated new Item */
    $(".edit-submit-disciplina").click(function(e){

        var form_action = $("#edit-disciplina").find("form").attr("action");
        var nome = $("#edit-disciplina").find("input[name='nome']").val();
        var descricao = $("#edit-disciplina").find("textarea[name='descricao']").val();
        var codigo = $("#edit-disciplina").find("input[name='codigo']").val();
        var semestre = $("#edit-disciplina").find("input[name='semestre']").val();
        var carga_horaria = $("#edit-disciplina").find("input[name='carga_horaria']").val();
        var id = $("#edit-disciplina").find(".edit-id").val();

        if(nome != '' && descricao != ''){
            $.ajax({
                dataType: 'json',
                type:'POST',
                url: url + form_action,
                data:{nome:nome,
                      descricao:descricao,
                      codigo:codigo,
                      semestre:semestre,
                      carga_horaria:carga_horaria,
                      id:id}
            }).done(function(data){
                getPageData();
                $(".modal").modal('hide');
                toastr.success('Disciplina atualizada.', 'Success Alert', {timeOut: 8000});
            });
        }else{
            alert('You are missing nome or descricao.')
        }

    });



    /* Add new Disciplina table row */
    function manageRow(data) {
      var rows = '';
      $.each( data, function( key, value ) {
          rows = rows + '<tr>';
          rows = rows + '<td>'+value.id+'</td>';
          rows = rows + '<td>'+value.nome+'</td>';
          rows = rows + '<td>'+value.descricao+'</td>';
          rows = rows + '<td>'+value.codigo+'</td>';
          rows = rows + '<td>'+value.semestre+'</td>';
          rows = rows + '<td>'+value.carga_horaria+'</td>';
          rows = rows + '<td data-id="'+value.id+'">';    
          rows = rows + '<button data-toggle="modal" data-target="#edit-disciplina" class="btn btn-primary edit-disciplina">Editar</button> ';
          rows = rows + '<button class="btn btn-danger remove-item">Excluir</button>';
          rows = rows + '</td>';
          rows = rows + '</tr>';
      });

      $("tbody").html(rows);
    }
});