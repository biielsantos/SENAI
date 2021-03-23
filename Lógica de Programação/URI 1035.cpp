#include <stdio.h>

int main(){
	
	int A,B,C,D;
	
	printf("digite 4 numeros: \n");
	scanf("%d %d %d %d",&A,&B,&C,&D);
	
	
	if(B>C && D>A && C+D>A+B && C+D>0 && A%2==0){
		printf ("Valores aceitos");
	}else{
		printf("Valores nao aceitos");
	}

}
