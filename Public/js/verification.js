let verifie={
    EsCeValide: function(y){
                return y.length >= 2;
    },
    ChekName: function(a){
         if (!this.EsCeValide(a)) {
            $('.nom-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.nom-retro').empty();
        }
    },
     ChekMail: function(a){

        if (!this.EsCeValide(a)) {
     $('.mail-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.mail-retro').empty();
        }
    },
     ChekMdp: function(a){
         if (!this.EsCeValide(a)) {
            $('.mdp-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.mdp-retro').empty();
        
        }
    },
       ChekMdpRepeat: function(a){
         if (!this.EsCeValide(a)) {
            $('.mdp-repeat-retro').text('Nombre de lettre insuffisant');
        } else {
            $('.mdp-repeat-retro').empty();
        
        }
    },

     ToutEstOk: function(a, b, c,d) {                        
        if ((this.EsCeValide(a)) && (this.EsCeValide(b)) && (this.EsCeValide(c)) && (this.EsCeValide(d))) {
            return true;
        }
    },
    init: function(){
    $("input").keyup(function(){
     	var name = $('#nom_user').val();
        var mail = $('#mail_user').val();
        var mdp = $('#mdp_user').val();
        var mdp_repeat = $('#mdp-repeat_user').val();
        verifie.ChekName(name);
        verifie.ChekMail(mail);
		verifie.ChekMdp(mdp);
        verifie.ChekMdpRepeat(mdp_repeat);
        if (verifie.ToutEstOk( name,  mail, mdp, mdp_repeat)) {
        $('#bouton_envoie').prop("disabled", false);
     	}
 	});

    }
}


	