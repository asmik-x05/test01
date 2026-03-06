#include <stdio.h>

// Function to perform binary search recursively
int binarySearch(int arr[], int left, int right, int key) {
    if (left > right) {
        return -1; // Element not found
    }

    int mid = left + (right - left) / 2;

    if (arr[mid] == key) {
        return mid; // Element found
    } else if (arr[mid] > key) {
        return binarySearch(arr, left, mid - 1, key); // Search in the left half
    } else {
        return binarySearch(arr, mid + 1, right, key); // Search in the right half
    }
}

int main() {
    int n, key;

    printf("Enter the number of elements: ");
    scanf("%d", &n);

    int arr[n];
    printf("Enter %d elements in sorted order:\n", n);
    for (int i = 0; i < n; i++) {
        scanf("%d", &arr[i]);
    }

    printf("Enter the element to search: ");
    scanf("%d", &key);

    int result = binarySearch(arr, 0, n - 1, key);

    if (result != -1) {
        printf("Element found at index %d\n", result);
    } else {
        printf("Element not found in the array.\n");
    }

    return 0;
}
