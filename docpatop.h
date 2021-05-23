#ifndef DOCPATOP_H
#define DOCPATOP_H

#include <QDialog>
namespace Ui {
class docpatop;
}

class docpatop : public QDialog
{
    Q_OBJECT

public:
    explicit docpatop(QWidget *parent = nullptr);
    ~docpatop();

private slots:
    void on_pushButton_clicked();

    void on_pushButton_sumit_clicked();

private:
    Ui::docpatop *ui;

};

#endif // DOCPATOP_H
