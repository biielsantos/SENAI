#include <iostream>
 
int main() {
 int n100,n50,n20,n10,n5,n1,valor;
 int r100,r50,r20,r10,r5,r1;
 
 printf ("Digite o valor do saque: ");
 scanf ("%d",&valor);
 
 n100 = valor / 100;
 r100 = valor % 100;
 
 n50 = r100 / 50;
 r50 = r100 % 50;
 
  n20 = r50 / 20;
  r20 = r50 % 20;
 
  n10 = r20 / 10;
  r10 = r20 % 10;
  
  n5 = r10 / 5;
  r5 = r10 % 5;
  
  n1 = r1 / 5;
  r1 = r1 % 5;
  
  printf ("Cedulas de 100: %d \n",n100);
  printf ("Cedulas de 50: %d \n",n50);
  printf ("Cedulas de 20: %d \n",n20);
  printf ("Cedulas de 10: %d \n",n10);
  printf ("Cedulas de 5: %d \n",n5);
  printf ("Cedulas de 1: %d \n",n1);
    return 0;
}
