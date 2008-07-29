#include "afparser.h"
#include "afutils.h"
// #include "aftypes.h"
#include <map>

class FilterEvaluator {
	public:
		void reset();
		void setVar( string key, AFPData value );
		void setVars( map<string,AFPData> values );
		bool evaluateFilter( string code );
	protected:
		bool move();
		bool move( int shift );
		void doLevelEntry( AFPData* result );
		void doLevelSet( AFPData* result );
		void doLevelBoolOps( AFPData* result );
		void doLevelCompares( AFPData* result );
		void doLevelMulRels( AFPData* result );
		void doLevelSumRels( AFPData* result );
		void doLevelPow( AFPData* result );
		void doLevelBoolInvert( AFPData* result );
		void doLevelSpecialWords( AFPData* result );
		void doLevelUnarys( AFPData* result );
		void doLevelBraces( AFPData* result );
		void doLevelFunction( AFPData* result );
		void doLevelAtom( AFPData* result );
		
		AFPToken cur;
		vector<AFPToken> tokens;
		unsigned int pos;
		string code;
		map<string,AFPData> vars;
};

// typedef AFPData (*AFPFunction) (vector<AFPData>);

vector<string> getOpsForType( string type );
