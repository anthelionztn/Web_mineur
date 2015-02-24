function carre(a){ // retourne le carre de a
	return a*a;
}
function somme(a,b){ // retourne la somme de a et b
	return a+b;
}
function max(a,b){
	if (a>b)
		{return a}
	else 
		{return b}
                 }

var tableau = [3 , 4 , 5 , 6];
echo(tableau);
tableau = tableau.map(carre);
echo(tableau);
var sommetableau = tableau.reduce(somme);
echo(sommetableau);
var maxtableau = tableau.reduce(max);
echo(maxtableau);

