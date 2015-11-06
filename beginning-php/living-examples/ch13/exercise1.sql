SELECT m.gender, sum( al.numVisits ) FROM members m, accessLog al WHERE m.id = al.memberId GROUP BY m.gender;

