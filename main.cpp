#include "healthc.h"

#include <QApplication>

int main(int argc, char *argv[])
{
    QApplication a(argc, argv);
    healthc w;
    w.show();
    return a.exec();
}
