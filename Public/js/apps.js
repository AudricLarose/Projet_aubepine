$(function(){
	apps={};
	var z =0;
	var score;
	var choix = ['Achillée','Aigremoine','Armoise','Aubepine','Bardane','Bouillon Blanc','Bruyeres',' Caoucine','Chardon Marie','Chicorée','Coquelicot','Cypres','eglantier','eschscholtzia','fenouil','figuier','frêne élevé','genevrier commun','laurier noble','lavande','lierre terrestre','marrionnier inde','mauves','melilot officinal','melisse officinale','menthes','millepertuis','Noisetier','olivier','origan','ortie','paquerette','pissenlit','plantain majeur','prele des champs','primeveres officinale', 'reine des prés','romarin','ronce','saponaire','sarriette des montagnes','sauge officinale','serpolet','souci officinal','sureau boir','thym commun','tilleul d europe','verveine officinale','vigne rouge'];
 	var tableau_des_choix = ["#js-choix-1","#js-choix-2","#js-choix-3","#js-choix-4"];
	function hasard_sauvage(){
		var Bswan=Math.floor(Math.random() * 49);
		console.log(Bswan);
		$('#guess').append(choix[Bswan]);
		var reponse=$('#guess').html();
		console.log(reponse);
		return reponse;	
	}
	var score=$('.score').html();
	console.log(score);
	var hasard=hasard_sauvage();
	var truth=$('#guess').html();
	console.log(truth);
	function appls(tableau_du_choix,x){
		$(tableau_du_choix).append(choix[x]).click(function(){console.log($(tableau_du_choix).html());
		var choice=$(tableau_du_choix).html();
		if (choice==truth){
		    var score=$('.score').html();
		    score=parseFloat(score);
		    score=score+100;
		    alert (score);
		   $('.score').load('model/ajax.score.php', {score: score });
        }
		});
	}
	for (var i = 0; i<tableau_des_choix.length; i++) {
			var Bswan=Math.floor(Math.random() * 7);
			[choix[i],choix[Bswan]]=[choix[Bswan],choix[i]];
			console.log(choix);
	}	
	function verif(){
		for (var i = 0; i <tableau_des_choix.length; i++) {
	    console.log(i);
 	    if (choix[i]==hasard){ return true };
 	    if ((choix[i]!=hasard) && (i>=3)){return false;}
 		}
    }
    console.log(verif());
    if (verif()==false){choix[3]=hasard}
    for (var i = 0; i<tableau_des_choix.length; i++) {
			var Bswan=Math.floor(Math.random() * 4);
			[choix[i],choix[Bswan]]=[choix[Bswan],choix[i]];
			console.log(choix);
	}
	for (var i = 0; i<tableau_des_choix.length; i++) {
    	appls(tableau_des_choix[i],i);
	}

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
    	console.log('ok');
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