#include <stdio.h>
#include <stdlib.h>

typedef struct Node {
    int info;
    struct Node *next;
} NodeType;

NodeType *head = NULL;

NodeType *getNode() {
    return (NodeType *)malloc(sizeof(NodeType));
}

void InsertAtBeg(int newItem)
{
    NodeType *NewNode;
    NewNode = getNode();
    NewNode->info = newItem;
    NewNode->next = head;
    head = NewNode;
}

void display() {
    NodeType *temp = head;
    while(temp != NULL) {
        printf("%d -> ", temp->info);
        temp = temp->next;
    }
    printf("NULL\n");
}
void deleteBeg()
{
NodeType *temp;
if(head==NULL)
{
printf("Empty list"); 
exit(1); 
}
else
{
temp=head;
printf("Deleted item is %d" , head->info);
head=head->next;
free(temp);
}}
int main() {
    InsertAtBeg(30);
    InsertAtBeg(20);
    InsertAtBeg(10);
printf("Before deletion at beginning:\n");
    display();
    deleteBeg();
    printf("\nAfter deletion at beginning:\n");
    display();
    return 0;
}