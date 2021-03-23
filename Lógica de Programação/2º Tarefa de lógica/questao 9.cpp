#include <stdio.h>
#include <locale.h>
#include <string.h>

main(){
   
    setlocale(LC_ALL, "Portuguese");
   
    char vetor[6];
    int i, tamanho_vetor;
    void OrdemCrescente (char vetor[], int tamanho_vetor);
   
    printf("Digite uma sequência de 6 números e o colocaremos em ordem crescente:\n");
    scanf("%d", &vetor[0]);
    scanf("%d", &vetor[1]);
    scanf("%d", &vetor[2]);
    scanf("%d", &vetor[3]);
    scanf("%d", &vetor[4]);
    scanf("%d", &vetor[5]);
   
    tamanho_vetor=strlen(vetor);
   
    printf("\n%d\n\n", tamanho_vetor); 
    OrdemCrescente (vetor, tamanho_vetor);
   
    puts("\nOrdem crescente: ");
   
    for(i=0; i<6; i++){
        printf("%d ", vetor[i]);
    }
}

void OrdemCrescente (char vetor[], int tamanho_vetor){
   
    int i, f, temporaria;
   
    for(i=0; i<tamanho_vetor; i++){
        for(f=i+1; f<tamanho_vetor; f++){
            if(vetor[i] > vetor[f]){
                temporaria = vetor[i];
                vetor[i] = vetor[f];
                vetor[f] = temporaria;
            }
        }
    }
}
