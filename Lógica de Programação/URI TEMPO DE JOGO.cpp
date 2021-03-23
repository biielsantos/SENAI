#include <stdio.h>


int main(){
	
	int in, fi;
	
	printf("tempo de inicio e fim do jogo: ");
	scanf("%d %d",&in,&fi);
	
	if(fi <= in){
	 fi+=24;
	 printf("O JOGO DUROU %d HORA(S)\n", fi-in);
}
}

