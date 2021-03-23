#include <stdio.h>

int main(){
	
	char n1[20], n2[20], n3[20];
	
	scanf("%s %s %s", &n1,&n2,&n3);
	
	if (n1[0]=='v'){
		if(n2[0]=='a'){
			if(n3[0]=='c'){
				printf("aguia");
			}else{
				printf("pomba");
			}
		}else{
			if(n3[0]=='o'){
				printf("homem");
			}else{
				printf("vaca");
			}	
		}
	}else{
		if(n2[0]=='i'){
			if(n3[2]=='m'){
				printf("pulga");
			}else{
				printf("lagarta");
			}
		}else{
		if(n3[0]=='h'){
			printf("sanguessuga");
		}else{
		printf("minhoca");	
		}			
		}	
	}	
}
