#include <stddef.h>
#include <math.h>
#include <string.h>

double udf_NVL(double *);
double udf_NVL(a)
double *a;
{
        if (a == NULL)
                return 0;
        else
                return *a;
}

double udf_RoundDec(double *, unsigned char *);
double udf_RoundDec(x, n)
double *x;
unsigned char *n;
{
        double pow_10 = pow(10.0f, (double)*n);
        return round(*x * pow_10) / pow_10;
}

int udf_Len(char *);
int udf_Len(s)
char *s;
{
        size_t len;
        len = strlen(s);
        return len;
}

