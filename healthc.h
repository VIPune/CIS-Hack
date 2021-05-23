#ifndef HEALTHC_H
#define HEALTHC_H

#include <QMainWindow>
#include "doctorreg.h"
#include "docpatop.h"

QT_BEGIN_NAMESPACE
namespace Ui { class healthc; }
QT_END_NAMESPACE

class healthc : public QMainWindow
{
    Q_OBJECT

public:
    healthc(QWidget *parent = nullptr);
    ~healthc();

private slots:


    void on_pushButton_clicked();

private:
    Ui::healthc *ui;
    doctorreg *reg1;
    docpatop *reg2;

};
#endif // HEALTHC_H
