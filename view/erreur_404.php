{% extends 'template_view.html.twig' %}
{% block title %} 
Erreur 404
{% endblock %}
{% block content %}<article class='error_404'>
	<h3>La page n'est pas accessible</h3>
    <img src="View/404_erreur.png" alt='404_erreur'>
</article>
{% endblock %}