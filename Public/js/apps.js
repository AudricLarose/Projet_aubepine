$(function(){

	let quizz={
	z :0,
	score:null,
    tabz:null,
    choice:null,
    Bswan:null,
    reponse:null,
 	tableau_des_choix : ["#js-choix-1","#js-choix-2","#js-choix-3","#js-choix-4"],
	hasard_sauvage : function (){
		quizz.Bswan=Math.floor(Math.random() * 48);
		console.log(quizz.Bswan);
        $.post('index.php?action=ajax_getId', {name: quizz.choix[this.Bswan] }, function(data,status){
		$('#guess').empty().append("<img src=images/"+data+".jpg />");
         })
		quizz.reponse=quizz.choix[this.Bswan];
		return quizz.reponse;  
	},
    données: function(){
        $.post('index.php?action=ajax_plante', function(data,status){
        quizz.tabz=data.split(',');
        quizz.choix=quizz.tabz;
        console.log(quizz.choix);
        this.score=$('.score').html();
        quizz.hasard=quizz.hasard_sauvage();
        quizz.truth=$('#guess').html();
        quizz.init();
        })
    },
    appls: function(tableau_du_choix,x){
        $(tableau_du_choix).empty().append(quizz.choix[x]).click(function(){
        quizz.choice=$(tableau_du_choix).html();
        alert(quizz.choice);
        alert(quizz.hasard);
        if (quizz.choice==quizz.hasard){
            quizz.score=$('.score').html();
                        alert(quizz.score);

            quizz.score=parseFloat(quizz.score);
                        alert(quizz.score);

            quizz.score=quizz.score+100;
                        alert(quizz.score);

            $.post('index.php?action=ajax_score', {score: quizz.score }, function(data,status){
            $('.score').html(data);
            });
            quizz.hasard=quizz.hasard_sauvage();
            quizz.init();
        }
    //         var hasard=hasard_sauvage();
    //         for (var i = 0; i<tableau_des_choix.length; i++) {
    //         var Bswan=Math.floor(Math.random() * 7);
    //         [choix[i],choix[Bswan]]=[choix[Bswan],choix[i]];
    // }   
    // function verif(){
    //     for (var i = 0; i <tableau_des_choix.length; i++) {
    //     if (choix[i]==hasard){ return true };
    //     if ((choix[i]!=hasard) && (i>=3)){return false;}
    //     }
    // }
    // if (verif()==false){choix[3]=hasard}
    // for (var i = 0; i<tableau_des_choix.length; i++) {
    //         var Bswan=Math.floor(Math.random() * 4);
    //         [choix[i],choix[Bswan]]=[choix[Bswan],choix[i]];
    // }
    // for (var i = 0; i<tableau_des_choix.length; i++) {
    //     appls(tableau_des_choix[i],i);
    // }
    //     });
        });
    },
    verif: function (){
        for (var i = 0; i <this.tableau_des_choix.length; i++) {
        if (this.choix[i]==quizz.hasard){ return true };
        if ((this.choix[i]!=quizz.hasard) && (i>=3)){return false;}
        }
    },
    init: function(){
        for (var i = 0; i<this.tableau_des_choix.length; i++) {
                this.Bswan=Math.floor(Math.random() * 7);
                [this.choix[i],this.choix[this.Bswan]]=[this.choix[this.Bswan],this.choix[i]];
        }
     
        if (this.verif()==false){this.choix[3]=quizz.hasard}
        for (var i = 0; i<this.tableau_des_choix.length; i++) {
                 this.Bswan=Math.floor(Math.random() * 4);
                [this.choix[i],this.choix[this.Bswan]]=[this.choix[this.Bswan],this.choix[i]];
        }
        console.log(this.tableau_des_choix);
        for (var i = 0; i<=this.tableau_des_choix.length; i++) {
            quizz.appls(this.tableau_des_choix[i],i);
        }
    }
}
 quizz.données();  

	function EsCeValide(y) {
        return y.length >= 2;
    }
    function ChekName(a) {                     
        if (! EsCeValide(a)) {
            $('.nom-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.nom-retro').empty();
        }
    }
    function ChekMail(a) {                          //verifie longueur prenom
        if (! EsCeValide(a)) {
            $('.mail-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.mail-retro').empty();
        }
    }
       function ChekMdp(a) {                          //verifie longueur prenom
        if (! EsCeValide(a)) {
            $('.mdp-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.mdp-retro').empty();
        }
    }
       function ChekMdpRepeat(a) {                          //verifie longueur prenom
        	if (! EsCeValide(a)) {
            	$('.mdp-repeat-retro').text('Nombre de lettre insuffisant');
        	} else {
            	$('.mdp-repeat-retro').empty();
        	}
    	}
        function ToutEstOk(a, b, c,d) {                          //verifie nom+prenom+nbr velo  
        if ((EsCeValide(a)) && (EsCeValide(b)) && (EsCeValide(c)) && (EsCeValide(d))) {
            return true;
        }
    }


    $("input").keyup(function(){
     	var name = $('#nom_user').val();
        var mail = $('#mail_user').val();
        var mdp = $('#mdp_user').val();
        var mdp_repeat = $('#mdp-repeat_user').val();
        ChekName(name);
        ChekMail(mail);
		ChekMdp(mdp);
        ChekMdpRepeat(mdp_repeat);
        if (ToutEstOk( name,  mail, mdp, mdp_repeat)) {
           	$('.bouton_envoie').addClass("d-block");
     	}
 	});
	
 })