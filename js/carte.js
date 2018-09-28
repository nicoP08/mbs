function afficher_cacher(id_aisne)
{
    if(document.getElementById(id_aisne).style.visibility=="hidden")
    {
        document.getElementById(id_aisne).style.visibility="visible";
        document.getElementById('bouton_'+id).innerHTML='Cacher le texte';
    }
    else
    {
        document.getElementById(id_aisne).style.visibility="hidden";
        document.getElementById('bouton_'+id).innerHTML='Afficher le texte';
    }
    return true;
}
