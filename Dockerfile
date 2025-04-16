FROM php:apache

COPY semgrep-report.html /var/www/html/index.html
COPY list_results.php /var/www/html/

RUN mkdir -p /var/www/html/results && chown www-data:www-data /var/www/html/results

EXPOSE 80 