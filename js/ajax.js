$(document).ready(function () {
  
  
     $("#edit").click(function () {
            var form = $(this).attr("data-form");
            alert(form);


            var msg = $(this).attr("data-msg");
            var confi = confirm(msg);
            if (confi === true) {
                var data = $(form).serialize();




                $.ajax({
                    type: "POST",
                    url: "<? php echo base_url('sistema/data_user') ?>",
                  
                    data: data,
                    async: true,
                    dataType: "json",
                    success: function (data) {
                        if (data.error) {
                            alert(data.error[0]);
                        } else {
                            console.log(data)
                            $(".resposta").append('');
                           
                            $.each(data.success, function (k, v) {
                                console.log(k)
                                var h = "<td>Cpf:" + v['cpf'] + "</td><td>Rg:" + v['rg'] + "</td><td>Endereço:" + v['endereco'] + "</td>";
                                 
                          alert(h);
                              
                            })
                        }
                    }, error: function (error) {
                        $(".resposta").html(error.responseText);
                    }
                });
            }
        })

        


        var session_info = $("#session_info");
        session_info.css({margin: 0, color: "white"});

        $(".footer").css({color: "white"});
        $("th").css({color: "orange", text: "bold text-transform :lowercase"});


        var td = $("td");
        td.css({color: "white", text: "bold"});
        td.mouseover(function ()
        {
            td.css({color: "white",text: "bold"});
        });

        td.mouseleave(function ()
        {
            td.css({color: "white",text: "bold"});
        });

        var input = $("input");
        input.css({width: "100%"});
        
        
     



    });