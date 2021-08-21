BEGIN {
	FS=",";
	OFS="\t\t";
}

{
	if ($4~"The Killers"){
		print $2,$3,$4
	}
}
