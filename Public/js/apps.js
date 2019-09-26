	let quizz={
	z :0,
    temps:null,
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
        if (quizz.choice==quizz.hasard){
            quizz.score=$('.score').html();
                        alert('Gagné ! vous avez actuellement: '+quizz.score+' points');
            quizz.score=parseFloat(quizz.score);
            quizz.score=quizz.score+100;
            $.post('index.php?action=ajax_score', {score: quizz.score }, function(data,status){
            $('.score').html(data);
            console.log(data);
            });
            quizz.hasard=quizz.hasard_sauvage();
            quizz.init();
    
        }
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
