#include <stdio.h>

int main (){
	
	int A,B;
	
	printf ("digite dois numeros: ");
	scanf("%d %d",&A,&B);
	
	if(A%B == 0 || B%A == 0){
		printf("Sao Multiplos");
	}else{
		printf("Nao sao Multiplos");
	}
		
}
