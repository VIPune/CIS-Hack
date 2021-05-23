#ifndef DOCTORREG_H
#define DOCTORREG_H

#include <QDialog>
#include "docpatop.h"
namespace Ui {
class doctorreg;
}

class doctorreg : public QDialog
{
    Q_OBJECT

public:
    explicit doctorreg(QWidget *parent = nullptr);
    ~doctorreg();

private slots:

    void on_pushButton_sumit_clicked();

    void on_pushButton_docyes_clicked();

private:
    Ui::doctorreg *ui;

};

#endif // DOCTORREG_H
