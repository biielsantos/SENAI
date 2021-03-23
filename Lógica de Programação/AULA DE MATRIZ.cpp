#include<stdio.h>

main()
{
 int z,x,vet[11], t=10;
 for(z=0; z<11; z++){
     vet[z]= t;
     t++;
 }
 for(z=10; z>=0; z=z-2){
 if(vet[z] %2 ==0);
 
 printf("%d\n",vet[z]);
}
}
