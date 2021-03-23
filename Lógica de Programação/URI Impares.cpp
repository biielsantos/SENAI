#include <stdio.h>


int main(){
	int x, impar=0;
	
	printf("Digite um numero: \n");
	scanf("%d", &x);
	
	while (impar < 6){
	if (x%2 != 0){
		printf("%d\n", x);
		impar++;
	}
	x++;	
	}
}
