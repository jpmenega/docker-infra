#include <stddef.h>
double udf_NVL(double *);

double udf_NVL(a)
double *a;
{
        if (a == NULL)
                return 0;
        else
                return *a;
}

