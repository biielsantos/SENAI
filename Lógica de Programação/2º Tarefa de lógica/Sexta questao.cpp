#include <stdio.h>

main(){
	
	int x;
	printf ("Coloque sua idade: \n");
	scanf ("%d",&x);
if(x<16){
	printf("Nao eleitor");
}
 else if(x>65){
	printf("Eleitor facultativo");
}
else if(x>=16){
	if(x<18){
		printf("Facultativo");
	}
	else{
	printf("Eleitor Obrigatorio");	
}
}
}


