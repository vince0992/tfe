$(document).ready(function(){
    // page create, afficher les group prix et rav
            $("#payant").click(function(){
            $(".payantok").toggleClass( "block" );
            }); 

            $("#ravito").click(function(){
            $(".ravitook").toggleClass( "block" );
            }); 

            // afficher le menu, page events
            $(".menu_top_button").click(function(){
            $("#menu_fixed").toggleClass("menu_afficher");
            $(".assombrir").toggleClass("assombrir_ok");
            $("body").toggleClass("block_scroll");
            $(this).toggleClass("close");
            $(".filter").toggleClass("disp_none");
            $(".floating_button").toggleClass("none");
            });

            // afficher les filtres, page events
            $(".filter").click(function(){
            $(".filtre_fixed").toggleClass( "filtre_afficher" );
            $(".assombrir").toggleClass("assombrir_ok");
            $("body").toggleClass("block_scroll");
            $(this).toggleClass("close_filter");
            $(".menu_top_button").toggleClass("disp_none");
            $(".floating_button").toggleClass("none");
            });

            // selectionner les filtres, page events
            $("li.item").click(function(){
            $(this).toggleClass("filtre_select");
            });
            

            // page details gerer les menus
            $(".menu_01").click(function(){
            $(".informations").addClass("detail_visible");
            $(".informations").removeClass("detail_invisible");

            $(".description").removeClass("detail_visible");
            $(".description").addClass("detail_invisible");

            $(".commentaires").removeClass("detail_visible");
            $(".commentaires").addClass("detail_invisible");

            $(".inscrits").removeClass("detail_visible");
            $(".inscrits").addClass("detail_invisible");

            $(this).addClass( "menu_current" );
            $(".menu_02").removeClass( "menu_current" );
            $(".menu_03").removeClass( "menu_current" );
            $(".menu_04").removeClass( "menu_current" );
            });

            $(".menu_02").click(function(){
            $(".description").addClass("detail_visible");
            $(".description").removeClass("detail_invisible");
            
            $(".informations").removeClass("detail_visible");
            $(".informations").addClass("detail_invisible");

            $(".commentaires").removeClass("detail_visible");
            $(".commentaires").addClass("detail_invisible");

            $(".inscrits").removeClass("detail_visible");
            $(".inscrits").addClass("detail_invisible");

            $(this).addClass( "menu_current" );
            $(".menu_01").removeClass( "menu_current" );
            $(".menu_03").removeClass( "menu_current" );
            $(".menu_04").removeClass( "menu_current" );
            });

            $(".menu_03").click(function(){
            $(".commentaires").addClass("detail_visible");
            $(".commentaires").removeClass("detail_invisible");

            $(".informations").removeClass("detail_visible");
            $(".informations").addClass("detail_invisible");

            $(".description").removeClass("detail_visible");
            $(".description").addClass("detail_invisible");

            $(".inscrits").removeClass("detail_visible");
            $(".inscrits").addClass("detail_invisible");

            $(this).addClass( "menu_current" );
            $(".menu_01").removeClass( "menu_current" );
            $(".menu_02").removeClass( "menu_current" );
            $(".menu_04").removeClass( "menu_current" );
            });

            $(".menu_04").click(function(){
            $(".inscrits").addClass("detail_visible");
            $(".inscrits").removeClass("detail_invisible");

            $(".informations").removeClass("detail_visible");
            $(".informations").addClass("detail_invisible");

            $(".description").removeClass("detail_visible");
            $(".description").addClass("detail_invisible");

            $(".commentaires").removeClass("detail_visible");
            $(".commentaires").addClass("detail_invisible");

            $(this).addClass( "menu_current" );
            $(".menu_01").removeClass( "menu_current" );
            $(".menu_02").removeClass( "menu_current" );
            $(".menu_03").removeClass( "menu_current" );
            });

            $(".menu_05").click(function(){
            $(".informations").addClass("detail_visible");
            $(".informations").removeClass("detail_invisible_left");

            $(".description").removeClass("detail_visible");
            $(".description").addClass("detail_invisible");  

            $(this).addClass( "menu_current" );
            $(".menu_06").removeClass( "menu_current" );
            });

            $(".menu_06").click(function(){
            $(".description").addClass("detail_visible");
            $(".description").removeClass("detail_invisible");

            $(".informations").removeClass("detail_visible");
            $(".informations").addClass("detail_invisible_left");

            $(this).addClass( "menu_current" );
            $(".menu_05").removeClass( "menu_current" );
            });

            $(".menu_07").click(function(){
            $(".commentaires").addClass("for_commentaires");
            $(".commentaires").removeClass("commentaires_off");

            $(".inscrits").removeClass("for_inscrits");
            $(".inscrits").addClass("inscrits_off");  

            $(this).addClass( "menu_current" );
            $(".menu_08").removeClass( "menu_current" );
            });

            $(".menu_08").click(function(){
            $(".inscrits").addClass("for_inscrits");
            $(".inscrits").removeClass("inscrits_off");

            $(".commentaires").removeClass("for_commentaires");
            $(".commentaires").addClass("commentaires_off");  

            $(this).addClass("menu_current");
            $(".menu_07").removeClass( "menu_current" );
            });

            $(".check").click(function(){
            $(this).toggleClass("bg_orange");
            });

        });



// page create, afficher un apercu de l image uploadée
        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('.prev').attr('src', e.target.result);
               
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#my-file").change(function(){
        readURL(this);
    });

// Create - vérification du formulaire
function surligne(champ, erreur)
{
   if(erreur)
      champ.style.backgroundColor = "#fba";
   else
      champ.style.backgroundColor = "";
}

function verifVille(champ)
{
   if(champ.value.length < 2 || champ.value.length > 25)
   {
      surligne(champ, true);
      return false;
   }
   else
   {
      surligne(champ, false);
      return true;
   }
}