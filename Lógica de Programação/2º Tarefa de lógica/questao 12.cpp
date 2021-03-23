#include <stdio.h>

main() {

int soma = 0;
int i;

for (int i=0;i<19;i++) {
	int x;
	printf("Digite um numero\n");
	scanf("%d",&x);
	soma += x; 	
}

printf("Total da soma dos numeros sao:%d\n ", soma);
}

