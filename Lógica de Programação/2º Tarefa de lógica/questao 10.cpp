#include <stdio.h>
#include<stdlib.h>
main()
{
 int x;
 printf("\n\n Informe um numero entre 1 e 4: ");
 scanf("%d",&x);
 while(x<1||x>4)
 {
 printf("\n Entrada Invalida:");
 scanf("%d",&x);
 }
 printf("\nO numero digitado e:% d",x);
 printf("\n\n");
}
