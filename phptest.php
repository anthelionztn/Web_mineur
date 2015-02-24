<HTML>
<HEAD>
<TITLE>Exemple de formulaire</TITLE>
</HEAD>
<BODY>
<FORM ACTION="http://www.med.univ-rennes1.fr/htbin/essai.pl" METHOD="POST">
<UL>

<LI>
Champ de type menu&nbsp;:<BR />
Sexe&nbsp;:
<SELECT NAME="sexe">
<OPTION VALUE="M" SELECTED>Masculin</OPTION>
<OPTION VALUE="F">Feminin</OPTION>
</SELECT>
</LI>

<LI>
Champ de type texte&nbsp;: <BR />
Age&nbsp;: <INPUT TYPE="text" SIZE="5" NAME="age">
</LI>

<LI>
Champ de type "boite a cocher"&nbsp;: <BR />
Informations sur le patient&nbsp;:
<INPUT TYPE="checkbox" NAME="fumeur" />fumeur
<INPUT TYPE="checkbox" NAME="obese" />obese
</LI>

<LI>
Champ de type selection multiple&nbsp;: <BR />
Pathologies chroniques&nbsp;:
<SELECT NAME="patho" SIZE="3" MULTIPLE>
<OPTION VALUE="1">Insusant hepatique</OPTION>
<OPTION VALUE="2">Insusant renal</OPTION>
<OPTION VALUE="3">Insusant respiratoire</OPTION>
<OPTION VALUE="4">Insusant cardiaque</OPTION>
</SELECT>
</LI>

<LI>
Champ de type texte long&nbsp;: <BR />
Commentaires&nbsp;:
<TEXTAREA ROWS="3" COLS="55" NAME="commentaire">ras</TEXTAREA>
</LI>

<LI>
Champ de type "un parmi plusieurs"&nbsp;: <BR />
Quelles informations&nbsp;?<BR />
<INPUT TYPE="radio" NAME="info" VALUE="diags" CHECKED />Diagnostics associes
<INPUT TYPE="radio" NAME="info" VALUE="actes" />Actes associes
<INPUT TYPE="radio" NAME="info" VALUE="unites" />Services consultes
</LI>

<LI>
Les boutons&nbsp;:
<INPUT TYPE="submit" VALUE=" EXECUTER " />
<INPUT TYPE="reset" VALUE=" ANNULER " />
</LI>

</UL>
</FORM>
</BODY>
</HTML>
