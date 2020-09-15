#ifndef TEST_H
#define TEST_H
#include <iostream>
#include <string>
#include "LinkedListOfInts.h"

class test{
public:
  test(){myTest = nullptr;};
  ~test(){delete myTest;};
  void print_result();

  void test_constructor();
  void test_destructor();
  void test_isEmpty();
  void test_size();
  void test_serach();
  void test_addBack();
  void test_addFront();
  void test_removeBack();
  void test_removeFront();

private:
  LinkedListOfInts* myTest;
  // myTest = new LinkedListOfInts();
};
#endif
