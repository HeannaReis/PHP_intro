$(window).on('load', function() {
     $.ajax({
          url: './ConsultNote.php',
          success: function(result) {
               $('#lista').html(result);
          },
          error: function(){
               $('#lista').html(`
                    <tr>
                         <td>Error</td>
                         <td>Error</td>
                    </tr>
               `);
          }
     })
     $('#anotar').on('click', function(){
          $.ajax({
               url: './InsertNota.php',
               data: 'desc='+$('#descricao').val(),
               type: 'POST',
               datatype: 'html',
               success: function(result){
                    $('#alert').html(result).hide(2000)
                    $('#descricao').val('')
                    $.ajax({
                         url: './ConsultNote.php',
                         success: function(lista){
                              $('#lista').html(lista);
                         },
                         error: function(){
                              $('#lista').html(`
                                   <tr>
                                        <td>Error</td>
                                        <td>Error</td>
                                   </tr>
                              `);
                         }
                    })
               },
               error: function(){
                    $('#alert').html('Erro ao realizar request.');
               }
          })
     })
     $('#editar').on('click', function(){
          $.ajax({
               url: './EditNote.php',
               data: {
                    id: $('#id').val(),
                    desc: $('#descricao').val()
               },
               type: 'POST',
               datatype: 'html',
               success: function(success){
                    window.location.href = 'http://localhost'
               },
               error: function(){
                    $('#alert').html('Erro ao realizar request.')
               }
          })
     })
     $('#search').on('click', function(){
          var data = $('#data').val().split('-').reverse().join('/')
          var pesq = $('#pesq').val()
          //data = data.split('-').reverse().join('/')
          $.ajax({
               url: './SearchNote.php',
               data: {
                    data: data,
                    desc: pesq
               },
               type: 'POST',
               datatype: 'html',
               success: function(pesquisa){
                    $('#lista').html(pesquisa)
               },
               error: function(){
                    $('#lista').html(`
                    <td>Erro ao Pesquisar</td>
                    `)
               }
          })
     })
     $('#sair').on('click', function(){
          $.ajax({
               url: './ExitUser.php',
               success: function(){
                    window.location.href = 'http://localhost'
               }
          })
     })
})