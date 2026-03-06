#include <stdio.h>

void BubbleSort(int A[], int n)
{
    int i, j, temp;
    for(i = 0; i < n-1; i++)        
    {
        for(j = 0; j < n-i-1; j++)  
        {
            if(A[j] > A[j+1])       
            {
                temp = A[j];        
                A[j] = A[j+1];
                A[j+1] = temp;
            }
        }
    }
}

void displayArray(int A[], int n)
{
    int i;
    for(i = 0; i < n; i++)
    {
        printf("%d ", A[i]);
    }
    printf("\n");
}

int main()
{
    int arr[] = {64, 34, 25, 12, 22, 11, 90};
    int n = sizeof(arr) / sizeof(arr[0]);

    printf("Original array: ");
    displayArray(arr, n);

    BubbleSort(arr, n);

    printf("Sorted array: ");
    displayArray(arr, n);

    return 0;
}