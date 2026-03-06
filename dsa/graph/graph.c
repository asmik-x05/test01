#include <stdio.h>

#define MAX 5

// Adjacency list
int graph[MAX][MAX] = {
    {1, 2},     // Neighbors of vertex 0
    {0, 3, 4},  // Neighbors of vertex 1
    {0},        // Neighbors of vertex 2
    {1},        // Neighbors of vertex 3
    {1}         // Neighbors of vertex 4
};

int degree[MAX] = {2, 3, 1, 1, 1}; // Number of neighbors per vertex
int visited[MAX] = {0};           // Visited array

void DFS(int vertex) {
    visited[vertex] = 1;
    printf("%d ", vertex);

    for (int i = 0; i < degree[vertex]; i++) {
        int neighbor = graph[vertex][i];
        if (!visited[neighbor]) {
            DFS(neighbor);
        }
    }
}

int main() {
    printf("DFS Traversal starting from vertex 0:\n");
    DFS(0);

    return 0;
}
