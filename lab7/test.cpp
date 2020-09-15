#include "test.h"
using namespace std;

void test::print_result()
{
    cout<<"Test1: Constructor-----------";
    test_constructor();
    cout<<endl;

    cout<<"Test2: Destructor-----------";
    test_constructor();
    cout<<endl;

    cout<<"Test3: isEmpty-----------";
    test_isEmpty();
    cout<<endl;

    cout<<"Test4: size-----------";
    test_size();
    cout<<endl;

    cout<<"Test5: search-----------";
    test_serach();
    cout<<endl;

    cout<<"Test6: addBack-----------";
    test_addBack();
    cout<<endl;

    cout<<"Test7: addFront-----------";
    test_addFront();
    cout<<endl;

    cout<<"Test8: removeBack-----------";
    test_removeBack();
    cout<<endl;

    cout<<"Test9: removeFront-----------";
    test_removeFront();
    cout<<endl;
}

void test::test_constructor()
{
  myTest = new LinkedListOfInts;
  if(myTest->toVector().size()==0){
    cout<<"True";
  }
  else
    cout<<"False(IsNotNullptr)";
  delete myTest;
}

void test::test_destructor()
{
  myTest = new LinkedListOfInts;
  delete myTest;
  if(myTest!= nullptr)
  {
    cout<<"False(DidNotDeleteList)";
  }
  else if(myTest->size()!=0)
  {
    cout<<"False(SizeDidNotInitialize)";
  }
  else
    cout<<"True";
}

void test::test_isEmpty()
{
  string test = "True";
  myTest = new LinkedListOfInts;
  if(myTest->isEmpty()==0)
  {
    test = "False(EmptyReturnFalse)";
  }
  myTest->addBack(1);
  myTest->addBack(2);
  if(myTest->isEmpty()==1)
  {
    test = "False(AlwaysReturnTrue)";
  }
  cout<<test;
  delete myTest;
}

void test::test_size(){
  myTest = new LinkedListOfInts;
  string test = "True";
  if(myTest->size()!=0)
  {
    test = "False(EmptyListHasNonZeroSize)";
  }
  for(int i = 0 ;i<10 ; i++)
  {
    myTest->addBack(i);
  }
  if(myTest->size()!=10)
  {
    test = "False(ReturnWrongSize)";
  }
  cout<<test;
  delete myTest;
}

void test::test_serach(){
  string test = "True";
  myTest = new LinkedListOfInts;
  for(int i = 0 ;i<10 ; i++)
  {
    myTest->addBack(i);
  }
  for(int i = 0 ;i<10 ; i++)
  {
    if(!myTest->search(i))
      test = "False(CannotSearchElementInList)";
  }
  if(myTest->search(30))
    test = "False(RetrunTrueAllTheTime)";
  cout<<test;
  delete myTest;
}

void test::test_addBack(){
  string test = "True";
  myTest = new LinkedListOfInts;
  for(int i = 0; i < 10 ;i++)
  {
    myTest->addBack(i);
  }
  vector<int> first = myTest->toVector();
  for(int i =0; i<10;i++)
  {
    int value = first.at(i);
    if(value != i)
    {
      test = "False(DidNotAddToTheBack)";
      break;
    }
  }
  cout<<test;
}

void test::test_addFront(){
  string test = "True";
  myTest = new LinkedListOfInts;
  for(int i = 0; i < 10 ;i++)
  {
    myTest->addFront(i);
  }
  vector<int> second = myTest->toVector();
  for(int i =0; i<10;i++)
  {
    int value = second.at(i);
    if(value != 9-i)
    {
      test = "False(DidNotAddToTheFront)";
      break;
    }
  }
  cout<<test;
}

void test::test_removeBack(){
  string test = "True";
  myTest = new LinkedListOfInts;
  for(int i = 0; i < 10 ;i++)
  {
    myTest->addFront(i);
  }
  if(myTest->removeBack()==true){
    if(myTest->size()!=9)
      test = "False(TheSizeDidNotChangeWithList)";
  }
  else
    test = "False(ReturnFalseAllTheTime)";
  cout<<test;
}

void test::test_removeFront(){
  string test = "True";
  myTest = new LinkedListOfInts;
  for(int i = 0; i < 10 ;i++)
  {
    myTest->addFront(i);
  }
  if(myTest->removeFront()==true){
    if(myTest->size()!=9)
      test = "False(TheSizeDidNotChangeWithList)";
  }
  else
    test = "False(ReturnFalseAllTheTime)";
  cout<<test;
}
