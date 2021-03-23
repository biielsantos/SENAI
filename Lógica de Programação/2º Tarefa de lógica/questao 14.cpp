#include<stdio.h>
#include<stdlib.h>
#include<math.h>
#include<conio.h>
#include<string.h>
main()
{
char nome[30];
int x,t, ca=0;
printf("\nInforme um nome : ");
gets(nome);
t=strlen(nome);
for (x=1; x <= t-1; x++)
{
if (nome[x] == 'a' || nome[x] == 'A')
ca++;
}
printf("\n O nome %s ",(nome));
printf("tem %d letra a.",ca);
}
